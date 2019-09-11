'use strict';

export default function browserHack() {

    'use strict';

    //htmlタグを変数に
    let htmlTag = document.documentElement;

    //userAgentを変数に
    let userAgent = window.navigator.userAgent.toLowerCase(),
        platform = window.navigator.platform.toLowerCase(),
        deviceType = navigator.userAgent.toLowerCase();

    //OS,ブラウザを変数に
    let uaIe = [/(msie|MSIE)/, /(T|t)rident/];

    //クラス名を変数に
    let browserClass = ['ie', 'windows', 'safari', 'chrome', 'firefox', 'ie 10', 'edge', 'android'];

    //スペースを定数に
    let SPACE = ' ';

    //function
    let addClassHack = (conditions, className) => {
        if (conditions) {
            htmlTag.className += SPACE + className;
        }
    };

    //android
    addClassHack(
        deviceType.indexOf("android") !== -1,
        browserClass[7]
    );

    //ie
    addClassHack(
        userAgent.match(uaIe[0]) || userAgent.match(uaIe[1]),
        browserClass[0]
    );

    //windows
    addClassHack(
        platform.indexOf('win') !== -1,
        browserClass[1]
    );

    //safari
    addClassHack(
        userAgent.indexOf(browserClass[2]) !== -1 && userAgent.indexOf(browserClass[3]) === -1,
        browserClass[2]
    );

    //chrome
    addClassHack(
        userAgent.indexOf(browserClass[2]) !== -1 && userAgent.indexOf(browserClass[3]) !== -1,
        browserClass[3]
    );

    //firefox
    addClassHack(
        userAgent.indexOf(browserClass[4]) !== -1,
        browserClass[4]
    );

    //ie10
    addClassHack(
        userAgent.indexOf(browserClass[5]) !== -1,
        'ie10'
    );

    //edge
    addClassHack(
        userAgent.indexOf(browserClass[6]) !== -1,
        browserClass[6]
    );

}
