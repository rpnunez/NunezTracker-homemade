<div class="row">
    <div class="col-lg-12">
        <table width="100%">
            <thead>
                <tr>
                    <td>Project</td>
                    <td>Company</td>
                    <td>Actions</td>
                </tr>
            </thead>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td>
                    <?php echo $project->name; ?> <br />
                    <?php echo $project->desc; ?>
                </td>
                <td>
                    <?php echo $project->company->name; ?>
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="/projects/view/<?php echo $project->id; ?>"><button type="button" class="btn btn-info">View</button></a>
                        <button type="button" class="btn btn-warning">Remind</button>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                More
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">View Company</a></li>
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