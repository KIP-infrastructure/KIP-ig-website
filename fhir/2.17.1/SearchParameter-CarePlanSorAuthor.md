# CarePlanSorAuthor - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlanSorAuthor**

## SearchParameter: CarePlanSorAuthor 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CarePlanSorAuthor | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:CarePlan SorAuthor |

 
Search by SOR-code as author on a CarePlan 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CarePlanSorAuthor",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CarePlanSorAuthor",
  "version" : "2.17.1",
  "name" : "CarePlan SorAuthor",
  "status" : "active",
  "date" : "2025-12-09T08:48:57+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Search by SOR-code as author on a CarePlan",
  "code" : "SorAuthor",
  "base" : ["CarePlan"],
  "type" : "token",
  "expression" : "CarePlan.extension.where(url='SorAuthor')",
  "comparator" : ["eq"]
}

```
