(function () {

    FTX.News = {

        list: {
        
            selectors: {
                news_table: $('#news-table'),
            },
        
            init: function () {

                this.selectors.news_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.news_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'intived_number', name: 'intived_number' },
                        { data: 'invited_talks', name: 'invited_talks' },
                        { data: 'status', name: 'status' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'actions', name: 'actions', searchable: false, sortable: false }

                    ],
                    order: [[0, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            }
        },

        edit: {
            init: function (locale) {
                FTX.tinyMCE.init(locale);                
            }
        },
    }
})();