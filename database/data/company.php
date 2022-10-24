<?php

$companies = [
  [
    "name" => "SGB Company",
    "description" => "",
    "logo" => "",
    "slogan" => "",
    "values" => "Modern Ultra Technology", "Innovation, Professionalism, Integrity",
    "directorates" => [
      [
        "cc" => 200,
        "name" => "Executive Administration",
        "code" => "DEA",
        "route" => "admin.dash.dea",
        "departments" => [
          [
            "name" => "Administration",
            "route" => "admin.dash.dea.administration",
            "offices" => [
              ["name" => "Executive", "route" => "admin.dash.dea.executive",],
              ["name" => "Management", "route" => "admin.dash.dea.management",]
            ]
          ],
          [
            "name" => "Secretariat",
            "route" => "admin.dash.dea.secretariat",
            "offices" => [
              ["name" => "Corporate", "route" => "admin.dash.dea.secretariat.corporate",],
              ["name" => "Auditing", "route" => "admin.dash.dea.secretariat.auditing",],
              ["name" => "Legal", "route" => "admin.dash.dea.secretariat.legal",],
            ]
          ]
        ]
      ],
      [
        "cc" => 210,
        "name" => "Synvast Engineering",
        "code" => "DSE",
        "route" => "admin.dash.dse",
        "departments" => [
          [
            "name" => "Electrical",
            "route" => "admin.dash.dse.electrical",
            "offices" => []
          ],
          [
            "name" => "Electronics",
            "route" => "admin.dash.dse.electronics",
            "offices" => []
          ],
          [
            "name" => "Construction",
            "route" => "admin.dash.dse.construction",
            "offices" => []
          ]
        ]
      ],
      [
        "cc" => 220,
        "name" => "Genset Premier",
        "code" => "DGP",
        "route" => "admin.dash.dgp",
        "departments" => [
          [
            "name" => "Developer",
            "route" => "admin.dash.dbt.developer",
            "offices" => []
          ],
        ]
      ],
      [
        "cc" => 230,
        "name" => "Brenden Tech",
        "code" => "DBT",
        "route" => "admin.dash.dbt",
        "departments" => [
          [
            "name" => "Graphics",
            "route" => "admin.dash.dbt.graphics",
            "offices" => []
          ],
        ]
      ],
      [
        "cc" => 240,
        "name" => "Human Resource",
        "code" => "DHR",
        "route" => "admin.dash.dhr",
        "departments" => [
          [
            "name" => "Capital",
            "route" => "admin.dash.dhr.capital",
            "offices" => [
              ["name" => "Careers", "route" => "admin.dash.dhr.careers",],
              ["name" => "Hiring", "route" => "admin.dash.dhr.hiring",],
              ["name" => "Remuneration", "route" => "admin.dash.dhr.remuneration",],
              ["name" => "Welfare", "route" => "admin.dash.dhr.welfare",]
            ]
          ],
          [
            "name" => "Personnel",
            "route" => "admin.dash.dhr.personnel",
            "offices" => [
              ["name" => "Resourcing", "route" => "admin.dash.dhr.resourcing",],
              ["name" => "Performance", "route" => "admin.dash.dhr.performance",],
              ["name" => "Outsourcing", "route" => "admin.dash.dhr.outsourcing",]
            ]
          ]
        ]
      ],
      [
        "cc" => 250,
        "name" => "Sales & Marketing",
        "code" => "DSM",
        "route" => "admin.dash.dsm",
        "departments" => [
          [
            "name" => "Sales",
            "route" => "admin.dash.dsm.sales",
            "offices" => [
              ["name" => "Ordering", "route" => "admin.dash.dsm.sales.ordering",],
              ["name" => "Pricing", "route" => "admin.dash.dsm.sales.pricing",],
              ["name" => "Packaging", "route" => "admin.dash.dsm.sales.packaging",],
            ]
          ],
          [
            "name" => "Marketing",
            "route" => "admin.dash.dsm.marketing",
            "offices" => [
              ["name" => "Promotion", "route" => "admin.dash.dsm.promotion",],
              ["name" => "Branding", "route" => "admin.dash.dsm.branding",]
            ]
          ]
        ],
      ],
      [
        "cc" => 260,
        "name" => "Operations & Planning",
        "code" => "DOP",
        "route" => "admin.dash.dop",
        "departments" => [
          [
            "name" => "Operations",
            "route" => "admin.dash.dop.operations",
            "offices" => [
              ["name" => "QAssurance",  "route" => "admin.dash.dop.qassurance",],
              ["name" => "Occupation",  "route" => "admin.dash.dop.occupation",],
              ["name" => "Relations",  "route" => "admin.dash.dop.relations",],
              ["name" => "Communication",  "route" => "admin.dash.dop.communication",]
            ]
          ],
          [
            "name" => "Planning",
            "route" => "admin.dash.dop.planning",
            "offices" => [
              ["name" => "Asset", "route" => "admin.dash.dop.planning.asset",],
              ["name" => "Catalogue", "route" => "admin.dash.dop.planning.catalogue",],
              ["name" => "Inventory", "route" => "admin.dash.dop.planning.inventory",],
              ["name" => "Shipment", "route" => "admin.dash.dop.planning.shipment",]
            ]
          ]
        ],
      ],
      [
        "cc" => 270,
        "name" => "Finance & Accounting",
        "code" => "DFA",
        "route" => "admin.dash.dfa",
        "departments" => [
          [
            "name" => "Finance",
            "route" => "admin.dash.dfa.finance",
            "offices" => [
              ["name" => "Budgeting", "route" => "admin.dash.dfa.finance.budgeting",],
              ["name" => "Payment", "route" => "admin.dash.dfa.finance.payment",],
              ["name" => "Corporate", "route" => "admin.dash.dfa.finance.corporate",]
            ]
          ],
          [
            "name" => "Accounting",
            "route" => "admin.dash.dfa.accounting",
            "offices" => [
              ["name" => "Cost", "route" => "admin.dash.dfa.accounting.cost",],
              ["name" => "Payroll", "route" => "admin.dash.dfa.accounting.payroll",],
              ["name" => "Tax", "route" => "admin.dash.dfa.accounting.tax",]
            ]
          ]
        ],
      ],
      [
        "cc" => 280,
        "name" => "Procurement & Logistics",
        "code" => "DPL",
        "route" => "admin.dash.dpl",
        "departments" => [
          [
            "name" => "Procurement",
            "route" => "admin.dash.dpl.procurement",
            "offices" => [
              ["name" => "Sourcing", "route" => "admin.dash.dpl.procurement.sourcing",],
              ["name" => "Tendering", "route" => "admin.dash.dpl.procurement.tendering",],
              ["name" => "Purchase", "route" => "admin.dash.dpl.procurement.purchase",],
              ["name" => "Supply", "route" => "admin.dash.dpl.procurement.supply",]
            ]
          ],
          [
            "name" => "Logistics",
            "route" => "admin.dash.dpl.logistics",
            "offices" => [
              ["name" => "Security", "route" => "admin.dash.dpl.logistics.security",],
              ["name" => "Transport", "route" => "admin.dash.dpl.logistics.transport",],
              ["name" => "Catering", "route" => "admin.dash.dpl.logistics.catering",],
              ["name" => "Accomodation", "route" => "admin.dash.dpl.logistics.accomodation",]
            ]
          ]
        ],
      ],
      [
        "cc" => 290,
        "name" => "Research & Development",
        "code" => "DRD",
        "route" => "admin.dash.drd",
        "departments" => [
          [
            "name" => "Research",
            "route" => "admin.dash.drd.research",
            "offices" => [
              ["name" => "Innovation", "route" => "admin.dash.drd.research.innovation",],
              ["name" => "Technology", "route" => "admin.dash.drd.research.technology",]
            ]
          ],
          [
            "name" => "Development",
            "route" => "admin.dash.drd.development",
            "offices" => [
              ["name" => "Investment", "route" => "admin.dash.drd.development.investment",],
              ["name" => "Projects", "route" => "admin.dash.drd.development.projects",]
            ]
          ]
        ],
      ]
    ]
  ]
];
