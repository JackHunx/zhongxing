<%@ WebHandler Language="C#" Class="UploadImage" %>

using System;
using System.Web;
using System.IO;
using System.Text;
using System.Collections;
public class UploadImage : IHttpHandler {
    
    string state = "SUCCESS";

    string URL = null;
    string currentType = null;
    string uploadpath = null;
    string filename = null;
    string originalName = null;
    HttpPostedFile uploadFile = null;
    
    public void ProcessRequest (HttpContext context) {
        
        context.Response.ContentType = "text/plain";

        //上传配置
        string pathbase = "Upload/";                                                                    //保存路径
        int size = 2;           //文件大小限制,单位MB                                                                                                   //文件大小限制，单位MB
        string[] filetype = { ".gif", ".png", ".jpg", ".jpeg", ".bmp" };         //文件允许格式


        //上传图片
        Hashtable info = new Hashtable();    
        info = upFile(context, pathbase, filetype, size);                               //获取上传状态

        string title = getOtherInfo(context, "pictitle");                              //获取图片描述

        string oriName = getOtherInfo(context, "fileName");                //获取原始文件名

        HttpContext.Current.Response.Write("{'url':'" + info["url"] + "','title':'" + title + "','original':'" + oriName + "','state':'" + info["state"] + "'}");  //向浏览器返回数据json数据
  
    } 
 

    private Hashtable upFile(HttpContext cxt, string pathbase, string[] filetype, int size)
    {
        pathbase = pathbase + "/";
        uploadpath = cxt.Server.MapPath(pathbase);//获取文件上传路径

        try
        {
            uploadFile = cxt.Request.Files[0];
            originalName = uploadFile.FileName;

            //目录创建
            createFolder();

            //格式验证
            if (checkType(filetype))
            {
                state = "不允许的文件类型";
            }
            //大小验证
            if (checkSize(size))
            {
                state = "文件大小超出网站限制";
            }
            //保存图片
            if (state == "SUCCESS")
            {
                filename = reName();
                uploadFile.SaveAs(uploadpath + filename);
                URL = pathbase + filename;
            }
        }
        catch (Exception e)
        {
            state = "未知错误";
            URL = "";
        }
        return getUploadInfo();
    }
    #region 上传文件的辅助方法

        /**
    * 获取文件信息
    * @param context
    * @param string
    * @return string
    */
    protected string getOtherInfo(HttpContext cxt, string field)
    {
        string info = null;
        if (cxt.Request.Form[field] != null && !String.IsNullOrEmpty(cxt.Request.Form[field]))
        {
            info = field == "fileName" ? cxt.Request.Form[field].Split(',')[1] : cxt.Request.Form[field];
        }
        return info;
    }
    /**
     * 获取上传信息
     * @return Hashtable
     */
    protected Hashtable getUploadInfo()
    {
        Hashtable infoList = new Hashtable();

        infoList.Add("state", state);
        infoList.Add("url", URL);

        if (currentType != null)
            infoList.Add("currentType", currentType);
        if (originalName != null)
            infoList.Add("originalName", originalName);
        return infoList;
    }   
    /**
     * 重命名文件
     * @return string
     */
    protected string reName()
    {
        return System.Guid.NewGuid() + getFileExt();
    }

    /**
     * 文件类型检测
     * @return bool
     */
    protected bool checkType(string[] filetype)
    {
        currentType = getFileExt();
        return Array.IndexOf(filetype, currentType) == -1;
    }

    /**
     * 文件大小检测
     * @param int
     * @return bool
     */
    protected bool checkSize(int size)
    {
        return uploadFile.ContentLength >= (size * 1024 * 1024);
    }
    /**
    * 获取文件扩展名
    * @return string
    */
    protected string getFileExt()
    {
        string[] temp = uploadFile.FileName.Split('.');
        return "." + temp[temp.Length - 1].ToLower();
    }

    /**
     * 按照日期自动创建存储文件夹
     */
    protected void createFolder()
    {
        if (!Directory.Exists(uploadpath))
        {
            Directory.CreateDirectory(uploadpath);
        }
    }
    #endregion
    public bool IsReusable {
        get {
            return false;
        }
    }

}