<?php echo $this->load->view('base/operator/header_operator'); ?>

<?php echo $this->load->view($content); ?>

<?php echo $this->load->view('base/operator/javascript_header'); ?>

<?php if (isset($javascript)) : ?>
<?php echo $this->load->view($javascript); ?>
<?php endif; ?>

<?php echo $this->load->view('base/operator/footer'); ?>
