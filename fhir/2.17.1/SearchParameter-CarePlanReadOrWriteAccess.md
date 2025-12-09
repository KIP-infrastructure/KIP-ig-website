# CarePlanReadOrWriteAccess - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlanReadOrWriteAccess**

## SearchParameter: CarePlanReadOrWriteAccess 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:CarePlanReadOrWriteAccess |

 
Search a CarePlan for readAccess or writeAccess SOR code 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CarePlanReadOrWriteAccess",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess",
  "version" : "2.17.1",
  "name" : "CarePlanReadOrWriteAccess",
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
  "description" : "Search a CarePlan for readAccess or writeAccess SOR code",
  "code" : "access-sor-code",
  "base" : ["CarePlan"],
  "type" : "string",
  "expression" : "CarePlan.activity.extension.where($this.url='readAccess' or $this.url='writeAccess').value",
  "comparator" : ["eq"]
}

```
