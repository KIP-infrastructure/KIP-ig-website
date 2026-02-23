# CarePlanReadOrWriteAccess - KIP Infrastructure v2.18.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlanReadOrWriteAccess**

## SearchParameter: CarePlanReadOrWriteAccess 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess | *Version*:2.18.0 |
| Active as of 2026-02-23 | *Computable Name*:CarePlanReadOrWriteAccess |

 
Search a CarePlan for readAccess or writeAccess SOR code 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CarePlanReadOrWriteAccess",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess",
  "version" : "2.18.0",
  "name" : "CarePlanReadOrWriteAccess",
  "status" : "active",
  "date" : "2026-02-23T12:18:41+00:00",
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
