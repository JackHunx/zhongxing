<?php
/**
 * 利息计算
 * 
 * 等额本息 利息计算法
 * @user Jack(king.521.love@gmail.com)
 */
class Interest
{
    public function init()
    {
        //must need
    }
    /**
     * 等额本息计算法
     * @param mix $data array('money','rate','last')
     * @return mix array('total','monthRepay')
     */
    public function average($data)
    {
        $monthRate = $data['rate'] / 100 / 12; //月利率
        //等额本息
        //Ci= M×（R％÷12）×（1+ R％÷12）N÷[（1+ R％÷12）N—1]
        $monthRepay = round($data['money']*$monthRate*pow(1+$monthRate,$data['last'])/(pow(1+$monthRate,$data['last'])-1),2);
        $total = $monthRepay*$data['last'];
        return array(
            'total'=>sprintf("%.2f",$total),//四舍五入
            'monthRepay'=>sprintf("%.2f",$monthRepay),
            'monthRate'=>sprintf("%.2f",$monthRate*100)//返回的数值是百分之多少
        
        );
    }
}
