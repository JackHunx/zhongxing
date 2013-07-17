 /**
        * 检查flash状态
        * @private
        * @param {Object} target flash对象
        * @return {Boolean}
        */
        function _checkReady(target) {
            if (typeof target !== 'undefined' && typeof target.flashInit !== 'undefined' && target.flashInit()) {
                return true;
            } else {
                return false;
            }
        };
        /**
        * 创建一个随机的字符串
        * @private
        * @return {String}
        */
        function _createString() {
            var prefix = 'bd__flash__';
            return prefix + Math.floor(Math.random() * 2147483648).toString(36);
        };

        /**
        * 为传入的匿名函数创建函数名
        * @private
        * @param {String|Function} fun 传入的匿名函数或者函数名
        * @return {String}
        */
        function _createFunName(fun) {
            var name = '';
            name = _createString();
            window[name] = function () {
                fun.apply(window, arguments);
            };
            return name;
        }
        /***
        反复判断Flash是欧加载完成,完成后为Flash添加回调函数..
        */
        var interval = setInterval(function () {
            try {
                var flash = thisMovie("flash");
                if (_checkReady(flash)) { //轮询flash的某个方法即可

                    var callBack = [];
                    callBack[0] = _createFunName(selectFileCallback);
                    callBack[1] = _createFunName(exceedFileCallback);
                    callBack[2] = _createFunName(deleteFileCallback);
                    callBack[3] = _createFunName(StartUploadCallback);
                    callBack[4] = _createFunName(uploadCompleteCallback);
                    callBack[5] = _createFunName(uploadErrorCallback);
                    callBack[6] = _createFunName(allCompleteCallback);
                    callBack[7] = _createFunName(changeHeightCallback);
                    thisMovie("flash").call('setJSFuncName', [callBack]);
                             
                    clearInterval(interval);
                }
            }
            catch (ex) {
            }
        }, 20);

        //获得Flash对象
        function thisMovie(movieName) {
            if (navigator.appName.indexOf("Misrosoft") != -1) {
                return window[movieName];
            }
            else {
                return document[movieName];
            }
        }
        //事件
        $(function () {
            $("#upload").live("click", function () { return upload(); });
        });
        // 通过添加文件按钮新增的需要上传文件
        function selectFileCallback(selectFiles) {
           

        }
        // 文件超出限制的最大体积时的回调
        function exceedFileCallback(selectFiles) {

        }
        //被删除的文件: 用于控制上传按钮是否显示...
        function deleteFileCallback(delFiles) {

        }
        //开始上传前执行的JS函数.
        function StartUploadCallback(data) {

        }
        //上传成功一个文件后执行的JS函数.
        //data.filename： "1_121029084117_2.png"
        //data.info: "{'url':'Upload//3e9a8006-c7a9-4b26-a015-f0bac4435613.png','title':'1_121029084117_2.png','original':'1_121029084117_2.png','state':'SUCCESS'}"
        //data.filetype :".png"
        //data.filesize :864163
        function uploadCompleteCallback(data) {

        }
        //上传失败后执行的JS函数.
        function uploadErrorCallback(data) {

        }
        //全部完成上传后执行
        function allCompleteCallback(data) {
            $("#reload").show();
        }
        //改变Flash高度时执行
        function changeHeightCallback(data) {

        }
        //开始上传
        function upload() {
            thisMovie("flash").upload();
        } 
