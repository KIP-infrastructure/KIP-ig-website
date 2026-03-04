# CarePlanReadOrWriteAccess - KIP Infrastructure v2.19.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlanReadOrWriteAccess**

## SearchParameter: CarePlanReadOrWriteAccess 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess | *Version*:2.19.2 |
| Active as of 2026-03-04 | *Computable Name*:CarePlanReadOrWriteAccess |

 
Search a CarePlan for readAccess or writeAccess SOR code 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CarePlanReadOrWriteAccess",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess",
  "version" : "2.19.2",
  "name" : "CarePlanReadOrWriteAccess",
  "status" : "active",
  "date" : "2026-03-04T14:42:21+00:00",
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
