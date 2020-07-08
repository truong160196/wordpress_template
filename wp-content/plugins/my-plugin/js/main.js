var notification;

$(function() {
    'use strict';

  /*
    Notification script setting
    Using library bootstrap notification
   */

    var titleText = "";
    var messageText = "";
    var settingNotify = {};

    notification = function (title, message) {
        if (title) {
            titleText = title;
        }

        if (message) {
            messageText = message;
        }

        return {
            success: showSuccessNotify,
            error: showErrorNotify,
            warning: showWaningNotify,
            info: showInfoNotify
        }
    };

    var showSuccessNotify = function () {
        const setting = {
            type: "success",
        };

        $.notify({
            title:"<b>"+ titleText +"</b>",
            message: messageText
        }, Object.assign(settingNotify, setting));
    };

    var showInfoNotify = function () {
        const setting = {
            type: "info",
        };

        $.notify({
            title:"<b>"+ titleText +"</b>",
            message: messageText
        }, Object.assign(settingNotify, setting));
    };

    var showErrorNotify = function () {
        const setting = {
            type: "danger",
        };

        $.notify({
            title:"<b>"+ titleText +"</b>",
            message: messageText
        }, Object.assign(settingNotify, setting));
    };

    var showWaningNotify = function () {
        const setting = {
            type: "warning",
        };

        $.notify({
            title:"<b>"+ titleText +"</b>",
            message: messageText
        }, Object.assign(settingNotify, setting));
    };
});