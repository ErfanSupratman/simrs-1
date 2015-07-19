<?php echo $this->load->view('base/operator/header'); ?>

<?php if (isset($javascript)) : ?>
<?php echo $this->load->view($javascript); ?>
<?php endif; ?>

<?php echo $this->load->view($content); ?>

<?php echo $this->load->view('base/operator/javascript'); ?>
<?php echo $this->load->view('base/operator/javascript_add'); ?>

<?php echo $this->load->view('base/operator/footer'); ?>