(function () {

    FTX.Publications = {

        list: {
        
            selectors: {
                publications_table: $('#publications-table'),
            },
        
            init: function () {

                this.selectors.publications_table.dataTable({

                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.publications_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'year', name: 'year' },
                        { data: 'link', name: 'link' },
                        { data: 'description', name: 'description' },
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