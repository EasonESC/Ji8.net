<?php
// navbar.php

// 取得當前頁面的 URL 路徑
$currentPath = $_SERVER['REQUEST_URI'];

// 檢查是否在根目錄
if (strpos($currentPath, '/Ji8.net/') === 0) {
    // 在根目錄或與根目錄同層級
    $progressLink = './progress/';
    $productsLink = './products/';
    $homeLink = './';
} else {
    // 在子資料夾，返回上一層
    $progressLink = '../progress/';
    $productsLink = '../products/';
    $homeLink = '../';
}
?>
<head>
<link rel=stylesheet href="./css/Ji8-v01-01-03.css" />
</head>
<div id="navbar">
    <div id="header_bar" style=" height: 216px;">
    <nav class="nav-links"style="width: 100vw; height: 66px; overflow: hidden; background: #faf0f8; position: fixed;">
            <ul style="white-space: nowrap; gap: 20px; background: #faf0f8; height: 100%; margin: 0; padding: 0; display: flex; align-items: center; margin-left:30px;">
                <li>
                    <a href="<?php echo $homeLink; ?>">HOME</a>
                </li>
                <li>
                     <a href="<?php echo $productsLink; ?>">PRODUCTS</a>
                </li>
                <li>
                    <a href="<?php echo $progressLink; ?>">PROGRESS</a>
                </li>
                <li>
                    <a href="https://nix.global/executive-team/" target="_blank">EXECUTIVE TEAM</a>
                </li>
                <li>
                    <a href="https://JASHO.ORG/" target="_blank">ABOUT US</a>
                </li>
            </ul>
        </nav>
        <table style="text-align: center; height: 140px; width: calc(100% - 100px);margin-left: 40px; margin-right: 40px; margin-top: 55px;">
            <tr style="width: auto;">
                <td style="text-align: left; padding-left: 10px;vertical-align: BOTTOM; ">
                        <a href="<?php echo $homeLink; ?>">
                            <img src="./images/JI83.png" alt="Logo" style="width: auto;height: 120px;">
                        </a>
                    </td>
                <td style="text-align: right; padding-right: 10px;vertical-align: BOTTOM;">
                    <div id=hWord_bar
                        style="white-space: nowrap; text-align: center; font-family: Arial, sans-serif;text-align: right;position: relative; z-index: 2;margin-right: 65px;">

                        <br>
                        <a style="white-space: nowrap; color:#67b9cd;">Welcome to &nbsp;</a>
                        <a href="<?php echo $homeLink; ?>" style="margin-left: 0px; color: rgba(255,201, 201,.9)">Ji8.net</a>
                        <a style="margin-left: 0px; color:#67b9cd;">&nbsp;and&nbsp;</a>
                        <a href="https://jasho.org" target="_blank" style="margin-left: 0px; color: rgba(255,201, 201,.9)">JASHO.ORG</a>
                        <br>
                        <br>
                        <a style="color:#67b9cd;"> &nbsp; &nbsp; &nbsp; &nbsp;Phoenix in ERA of&nbsp;iX&nbsp;Computing</a>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</div>

