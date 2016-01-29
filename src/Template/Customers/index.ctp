<div class="row">
    <div class="col-lg-12">
        <table width="100%">
            <thead>
            <tr>
                <td>Customer</td>
                <td>Company</td>
                <td>Actions</td>
            </tr>
            </thead>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td>
                        <a href="<?php echo $this->Url->build('/customers/view/'. $customer->customer_id, true); ?>">
                            <?php echo $customer->name; ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo $this->Url->build('/companies/view/'. $customer->company->company_id, true); ?>">
                            <?php echo $customer->company->name; ?>
                        </a>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="<?php echo $this->Url->build('/customers/view/'. $customer->customer_id, true); ?>" class="btn btn-info">View</a>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    More
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>