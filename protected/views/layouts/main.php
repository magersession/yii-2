<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page">

		<div id="header">
			<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		</div><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu', array(
				'items' => array(
					// Home
					array('label' => 'Home', 'url' => array(''), 'visible' => Yii::app()->user->isGuest),
					array('label' => 'Home', 'url' => array('admin/'), 'visible' => Yii::app()->user->getLevel() == 1),
					array('label' => 'Home', 'url' => array('dokter/'), 'visible' => Yii::app()->user->getLevel() == 2),

					array('label' => 'Srbac Install', 'url' => Yii::app()->urlManager->createUrl('srbac/authitem/install'), 'visible' => Yii::app()->user->isGuest),
					array('label' => 'Srbac', 'url' => Yii::app()->urlManager->createUrl('srbac/'), 'visible' => Yii::app()->user->isGuest),	

					// Menu Admin
					array('label' => 'Pegawai', 'url' => Yii::app()->urlManager->createUrl('admin/pegawai/'), 'visible' => Yii::app()->user->getLevel() == 1),
					array('label' => 'User', 'url' => Yii::app()->urlManager->createUrl('admin/user/'), 'visible' => Yii::app()->user->getLevel() == 1),
					array('label' => 'Tindakan', 'url' => Yii::app()->urlManager->createUrl('admin/tindakan/'), 'visible' => Yii::app()->user->getLevel() == 1),
					array('label' => 'Wilayah', 'url' => Yii::app()->urlManager->createUrl('admin/wilayah/'), 'visible' => Yii::app()->user->getLevel() == 1),
					array('label' => 'Obat', 'url' => Yii::app()->urlManager->createUrl('admin/obat/'), 'visible' => Yii::app()->user->getLevel() == 1),
					array('label' => 'Pasien', 'url' => Yii::app()->urlManager->createUrl('admin/pasien/'), 'visible' => Yii::app()->user->getLevel() == 1),

					//Menu Dokter
					array('label' => 'Transaksi', 'url' => Yii::app()->urlManager->createUrl('dokter/transaksi/'), 'visible' => Yii::app()->user->getLevel() == 2),

					array('label' => 'Login', 'url' => Yii::app()->urlManager->createUrl('login/'), 'visible' => Yii::app()->user->isGuest),
					array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => Yii::app()->urlManager->createUrl('logout/'), 'visible' => !Yii::app()->user->isGuest)
				),
			)); ?>
		</div><!-- mainmenu -->
		<?php if (isset($this->breadcrumbs)) : ?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links' => $this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif ?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br />
			All Rights Reserved.<br />
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->

	</div><!-- page -->

</body>

</html>