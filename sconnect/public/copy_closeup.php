<?php
$files = [
    'C:/Users/DELL/.gemini/antigravity-ide/brain/68f104de-a5d2-42bf-8b3d-f82c29ceeb94/tech4school_robot_closeup_1782947455901.png' => 'd:/Sconnect+/domains/sconnectplus.cd/public_html/images/tech4school_robot.png',
    'C:/Users/DELL/.gemini/antigravity-ide/brain/68f104de-a5d2-42bf-8b3d-f82c29ceeb94/academy_cap_closeup_1782947481232.png' => 'd:/Sconnect+/domains/sconnectplus.cd/public_html/images/academy_cap.png',
    'C:/Users/DELL/.gemini/antigravity-ide/brain/68f104de-a5d2-42bf-8b3d-f82c29ceeb94/studio_tablet_closeup_1782947508779.png' => 'd:/Sconnect+/domains/sconnectplus.cd/public_html/images/studio_tablet.png'
];

foreach ($files as $src => $dst) {
    if (file_exists($src)) {
        if (copy($src, $dst)) {
            echo "Copied: $src to $dst\n";
        } else {
            echo "Failed to copy: $src\n";
        }
    } else {
        echo "Source file does not exist: $src\n";
    }
}

unlink(__FILE__);
?>
