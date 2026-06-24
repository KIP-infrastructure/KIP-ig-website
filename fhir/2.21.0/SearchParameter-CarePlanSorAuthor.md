# CarePlanSorAuthor - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlanSorAuthor**

## SearchParameter: CarePlanSorAuthor 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CarePlanSorAuthor | *Version*:2.21.0 |
| Active as of 2026-06-24 | *Computable Name*:CarePlan SorAuthor |

 
Search by SOR-code as author on a CarePlan 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CarePlanSorAuthor",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CarePlanSorAuthor",
  "version" : "2.21.0",
  "name" : "CarePlan SorAuthor",
  "status" : "active",
  "date" : "2026-06-24T13:08:41+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Search by SOR-code as author on a CarePlan",
  "code" : "SorAuthor",
  "base" : ["CarePlan"],
  "type" : "token",
  "expression" : "CarePlan.extension.where(url='SorAuthor')",
  "comparator" : ["eq"]
}

```
