jQuery(() => {
    let date = new Date();
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'foodCanvas',
            label: 'Food Donations Per Month',
            q: 'food_donations',
            y: date.getFullYear()
    });
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'clothesCanvas',
            label: 'Clothes Donations Per Month',
            q: 'clothes_donations',
            y: date.getFullYear()
    });
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'shoesCanvas',
            label: 'Shoes Donations Per Month',
            q: 'shoes_donations',
            y: date.getFullYear()
    });
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'fundsCanvas',
            label: 'Funds Donations Per Month',
            q: 'payments',
            y: date.getFullYear()
    });

    $("#change-year").on('change', function(){
        plotGraph(
            {
                url: '/admin/charts', 
                id: 'foodCanvas',
                label: 'Food Donations Per Month',
                q: 'food_donations',
                y: $(this).val()
        });
        plotGraph(
            {
                url: '/admin/charts', 
                id: 'clothesCanvas',
                label: 'Clothes Donations Per Month',
                q: 'clothes_donations',
                y: $(this).val()
        });
        plotGraph(
            {
                url: '/admin/charts', 
                id: 'shoesCanvas',
                label: 'Shoes Donations Per Month',
                q: 'shoes_donations',
                y: $(this).val()
        });
        plotGraph(
            {
                url: '/admin/charts', 
                id: 'fundsCanvas',
                label: 'Funds Donations Per Month',
                q: 'payments',
                y: $(this).val()
        });
    })
})

function plotGraph(setting = {})
{
    $.ajax({
        url: window.location.origin + setting.url,
        type: 'GET',
        data: {q: setting.q, y: setting.y},
        beforeSend: () => {
            $(".loading").toggleClass('d-none')
        },
        success: function (response)
        {
          var data = JSON.parse(response);
         
            var months = [];
            var donation = [];
            //console.log(data.length)
             for (let index = 0; index < data.length; index++) {
                 months.push(data[index].month)
                 donation.push(data[index].donation)
             }
            //  console.log(donation);
            var chartdata = {
                labels: months,
                datasets: [
                    {
                        label: `${setting.label} for year ${setting.y} `,
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#800080',
                        hoverBorderColor: '#666666',
                        data: donation
                    }
                ]
            };

            var graphTarget = $("#"+setting.id);

            return new Chart(graphTarget, {
                type: 'bar',
                data: chartdata
            });
        },
        complete: () => {
            $(".loading").toggleClass('d-none')
        }
    });
}