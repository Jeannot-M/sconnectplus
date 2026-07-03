<?php
$src = "C:/Users/DELL/.gemini/antigravity-ide/brain/76b59eec-0d37-4574-ab64-2fe9cea50583/server_cloud_security_illustration_1783031226795.png";
$dst = "d:/Sconnect+/domains/sconnectplus.cd/public_html/images/server_illustration.png";
if (copy($src, $dst)) {
    echo "SUCCESS";
} else {
    echo "FAILED";
}
unlink(__FILE__);
