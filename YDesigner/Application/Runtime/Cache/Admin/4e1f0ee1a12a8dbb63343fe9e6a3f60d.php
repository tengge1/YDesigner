<?php if (!defined('THINK_PATH')) exit();?>﻿<div class="pageContent">
    <form method="post" action="/YDesigner/index.php/User/add?_=1452358485847" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
        <div class="pageFormContent" layouth="56">
            <p>
                <label>用户名：</label>
                <input name="username" class="required" type="text" autocomplete="off" />
            </p>
            <p>
                <label>密码：</label>
                <input name="password" class="required" type="password" autocomplete="off" />
            </p>
            <p>
                <label>姓名：</label>
                <input name="name" class="required" type="text" autocomplete="off" />
            </p>
            <p>
                <label>手机：</label>
                <input name="phone" class="required" type="text" autocomplete="off" />
            </p>
            <p>
                <label>类型：</label>
                <select name="type" class="required combox">
                    <option value="" selected>请选择</option>
                    <option value="01">管理员</option>
                    <option value="02">设计师</option>
                    <option value="03">测试用户</option>
                </select>
            </p>
            <p>
                <label>备注：</label>
                <input name="comment" type="text" autocomplete="off" />
            </p>
        </div>
        <div class="formBar">
            <ul>
                <li>
                    <div class="buttonActive">
                        <div class="buttonContent">
                            <button type="submit">保存</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="button">
                        <div class="buttonContent">
                            <button type="button" class="close">取消</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</div>