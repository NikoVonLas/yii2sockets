<?php
/**
 * @var $nodeSockets \digitv\yii2sockets\YiiNodeSocket
 * @var $redis yii\redis\Connection
 */
?>
{
    "port": <?= $nodeSockets->nodeJsPort ?>,
    "hostname": "<?= $nodeSockets->nodeJsHost ?>",
    "cookieName": "<?= $nodeSockets->sessionVarName ?>",
    "sessionKeyPrefix": "<?= $nodeSockets->sessionKeyPrefix ?>",
    "redis": {
        "hostname": "<?= $redis->hostname ?>",
        "port": <?= $redis->port ?>,
        <?php if(!empty($redis->password)) { ?>
        "password": "<?= $redis->password ?>"
        <?php } ?>
    },
    "serviceKey": "<?= $nodeSockets->serviceKey ?>",
    <?php if(empty($nodeSockets->sslConf)) { ?>
    "sslConf": {
        "key":"",
        "cert":""
    },
    <?php } else { ?>
    "sslConf": <?= json_encode($nodeSockets->sslConf) ?>,
    <?php } ?>
    "debug": false
}