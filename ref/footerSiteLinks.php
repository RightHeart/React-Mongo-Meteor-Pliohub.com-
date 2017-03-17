<?php
for($i=0;$i<count($footerSiteLinksText);$i++){
echo "<a href='$footerSiteLinksLink[$i]'".(($footerSiteLinksAttr[$i])?$footerSiteLinksAttr[$i]:'').">$footerSiteLinksText[$i]</a> &nbsp;\n";
}

?>