<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Pet</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $totalPets ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Pet Topic</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $TotalPetTopic ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Pet Detail</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $TotalPetDetail ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Learn Science</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $TotalLearnScience ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total KnowleDge base</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $TotalKnowleDgebase6 ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Quiz</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $TotalQuiz ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Favorite</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $TotalFavorite ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Author</div>
                            <div class="stat-digit"> <i class="fa "></i><?= $TotalAuthor ?></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-12">
                <canvas id="myChart" class="w-100"></canvas>
            </div>
            <div class="col-xl-8 col-md-8 col-12">
                <div id="bar-chart"></div>
            </div>
        </div>
    </div>
</div>

<script>
    var totalPets = <?php echo $totalPets; ?>;
    var totalPetTopic = <?php echo $TotalPetTopic; ?>;
    var totalPetDetail = <?php echo $TotalPetDetail; ?>;
    var totalLearnScience = <?php echo $TotalLearnScience; ?>;
    var totalKnowledgebase6 = <?php echo $TotalKnowleDgebase6; ?>;
    var totalQuiz = <?php echo $TotalQuiz; ?>;
    var totalFavorite = <?php echo $TotalFavorite; ?>;
    var totalAuthor = <?php echo $TotalAuthor; ?>;

    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'pie', // Loại biểu đồ hình tròn
        data: {
            labels: ['Total Pets', 'Total Pet Topic', 'Total Pet Detail', 'Total Learn Science', 'Total Knowledgebase6', 'Total Quiz', 'Total Favorite', 'Total Author'],
            datasets: [{
                label: 'Number of Items',
                data: [totalPets, totalPetTopic, totalPetDetail, totalLearnScience, totalKnowledgebase6, totalQuiz, totalFavorite, totalAuthor],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    var countClas = <?php echo $countClas; ?>;
    var countOrdo = <?php echo $countOrdo; ?>;
    var countFamily3 = <?php echo $countFamily3; ?>;
    var countSpecies4 = <?php echo $countSpecies4; ?>;
    var countFromTable = <?php echo $countFromTable; ?>;

    new Morris.Bar({
        element: 'bar-chart',
        data: [{
                label: 'Total Class',
                value: countClas
            },
            {
                label: 'Total Ordo',
                value: countOrdo
            },
            {
                label: 'Total Family',
                value: countFamily3
            },
            {
                label: 'Total Species',
                value: countSpecies4
            },
            {
                label: 'Total Animaldatas',
                value: countFromTable
            }
        ],
        xkey: 'label',
        ykeys: ['value'],
        labels: ['Value']
    });
</script>