import { useFetch } from '@/Services/composables/fetch'
import { ref, reactive, toRefs } from '@vue/composition-api'

export function apiAdmin() {
  const apiDashboards = useFetch('https://localhost/admin/menu', false)
//   const apiDashboards = useFetch(route("admin.menu"), false, {})
  
  const state = reactive({ 
    dashboards:  apiDashboards.data, 
    departments: [
      { name: 'DEA', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Chairman', icon: 'mdi-account-circle', href:'admin.departments.dea.chairman', active: false, },
        {name: 'Secretary', icon: 'mdi-account-circle', href:'admin.departments.dea.secretary', active: false, },
        {name: 'Manager', icon: 'mdi-account-circle',  href:'admin.departments.dea.manager', active: false, },
        ],
    },
    { name: 'DSE', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Electrical', icon: 'mdi-account-circle', active: false, groups: [
            {name: 'Products', icon: 'mdi-web', href:'admin.departments.dse.electrical.products', active: false},
            {name: 'Services', icon: 'mdi-account-circle', href:'admin.departments.dse.electrical.services', active: false},
            {name: 'Contracts', icon: 'mdi-account-circle', href:'admin.departments.dse.electrical.contracts', active: false}, ]
        },
        {name: 'Electronics', icon: 'mdi-account-circle', href:'admin.departments.dse.electronics', active: false,},
        {name: 'Automation', icon: 'mdi-account-circle', href:'admin.departments.dse.automation', active: false,} ],
    },
    { name: 'DBT', icon: 'mdi-account-circle', href:'admin.departments.dbt.home', active: false, },
    { name: 'DGP', icon: 'mdi-account-circle', href:'admin.departments.dgp.home', active: false, },
    { name: 'DSM', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Inventory', icon: 'mdi-account-circle', href:'admin.departments.dsm.inventory', active: false, },
        {name: 'Ordering', icon: 'mdi-account-circle', href:'admin.departments.dsm.ordering', active: false, },
        {name: 'Advertising', icon: 'mdi-account-circle', href:'admin.departments.dsm.advertising', active: false, },
        {name: 'Promotions', icon: 'mdi-account-circle', href:'admin.departments.dsm.promotions', active: false, },
        ],
    },
    { name: 'DOP', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Operations', icon: 'mdi-account-circle', href:'admin.departments.dop.operations', active: false, },
        {name: 'Planning', icon: 'mdi-account-circle', href:'admin.departments.dop.planning', active: false, },
        {name: 'Occupation', icon: 'mdi-account-circle', href:'admin.departments.dop.occupation', active: false, },
        {name: 'Communication', icon: 'mdi-account-circle', href:'admin.departments.dop.communication', active: false, },
        ],
    },
    { name: 'DFA', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Finance', icon: 'mdi-account-circle', href:'admin.departments.dfa.finance', active: false, },
        {name: 'Corporate', icon: 'mdi-account-circle', href:'admin.departments.dfa.corporate', active: false, },
        {name: 'Cost', icon: 'mdi-account-circle', href:'admin.departments.dfa.cost', active: false, },
        ],
    },
    { name: 'DPP', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Purchasing', icon: 'mdi-account-circle', href:'admin.departments.dpp.purchasing', active: false, },
        {name: 'Tendering', icon: 'mdi-account-circle', href:'admin.departments.dpp.tendering', active: false, },
        {name: 'Suppliers', icon: 'mdi-account-circle', href:'admin.departments.dpp.suppliers', active: false, },
        ],
    },
    { name: 'DRD', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Projects', icon: 'mdi-account-circle', href:'admin.departments.drd.projects', active: false, },
        {name: 'Innovation', icon: 'mdi-account-circle', href:'admin.departments.drd.innovation', active: false, },
        {name: 'Investment', icon: 'mdi-account-circle', href:'admin.departments.drd.investment', active: false, },
        ],
    },
    { name: 'DHR', icon: 'mdi-account-circle', active: false, groups: [
        {name: 'Personnel', icon: 'mdi-account-circle', href:'admin.departments.dhr.personnel', active: false, },
        {name: 'Recruitment', icon: 'mdi-account-circle', href:'admin.departments.dhr.recruitment', active: false, },
        {name: 'Performance', icon: 'mdi-account-circle', href:'admin.departments.dhr.performance', active: false, },
        {name: 'Outsourcing', icon: 'mdi-account-circle', href:'admin.departments.dhr.outsourcing', active: false, },
        ],
    },
    ]
  });
  
  return { ...toRefs(state) };
}