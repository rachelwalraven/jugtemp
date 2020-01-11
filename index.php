<?php defined('_JEXEC') or die; ?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
    <jdoc:include type="head" />
    <!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/template.css" type="text/css" />-->
    <!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />-->
</head>

<body>
    <jdoc:include type="component" />
    <jdoc:include type="message" />
    <jdoc:include type="modules" name="NAAM" style="xhtml" />
    <jdoc:include type="modules" name="debug" style="none" />
</body>

</html>
