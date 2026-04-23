# CarePlanReadOrWriteAccessSP - KIP Infrastructure v2.19.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlanReadOrWriteAccessSP**

## SearchParameter: CarePlanReadOrWriteAccessSP 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess | *Version*:2.19.3 |
| Active as of 2026-04-23 | *Computable Name*:CarePlanReadOrWriteAccess |

 
Search a CarePlan for readAccess or writeAccess SOR code 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CarePlanReadOrWriteAccessSP",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess",
  "version" : "2.19.3",
  "name" : "CarePlanReadOrWriteAccess",
  "status" : "active",
  "date" : "2026-04-23T11:46:51+00:00",
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
  "description" : "Search a CarePlan for readAccess or writeAccess SOR code",
  "code" : "access-sor-code",
  "base" : ["CarePlan"],
  "type" : "string",
  "expression" : "CarePlan.activity.extension.where($this.url='readAccess' or $this.url='writeAccess').value",
  "comparator" : ["eq"]
}

```
