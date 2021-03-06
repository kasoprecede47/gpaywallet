

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 login-box">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Transactions History.</h4>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Transaction type</td>
                        <td>Transaction Status</td>
                        <td>Amount (N)</td>
                    </tr>
                    </thead>

                    <tbody>

                    <?php if (isset($history) && !empty($history)) {
                        $index = 1;
                        foreach ($history as $h) {
                            ?>
                            <tr>
                                <td><?= $index ?></td>
                                <td><span
                                        class="label label-<?= $h->transaction_type == 'credit' ? 'success' : 'warning' ?>">
                                    <?= $h->transaction_type ?>
                                </span>
                                </td>
                                <td><?= $h->transaction_status ?></td>
                                <td><?= $h->transaction_amount ?></td>
                                <td><?= \Carbon\Carbon::createFromTimestamp($h->created_at->getTimestamp())->diffForHumans() ?></td>
                            </tr>
                            <?php
                            $index++;
                        }
                    } ?>
                    </tbody>
                </table>
            </div>

            <div>
                <ul class="pagination">
                    <li><a href="#">< PREVIOUS</a></li>
                    <li><a href="#">NEXT ></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>