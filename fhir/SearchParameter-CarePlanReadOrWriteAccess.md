# CarePlanReadOrWriteAccess - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CarePlanReadOrWriteAccess**

## SearchParameter: CarePlanReadOrWriteAccess 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess | *Version*:2.14.0 |
| Active as of 2025-11-13 | *Computable Name*:CarePlanReadOrWriteAccess |

 
Search a CarePlan for readAccess or writeAccess SOR code 

## CarePlanReadOrWriteAccess

Parameter `access-sor-code`:`string`

Search a CarePlan for readAccess or writeAccess SOR code

| | |
| :--- | :--- |
| Resource | [CarePlan](http://hl7.org/fhir/R4/careplan.html) |
| Expression | `CarePlan.activity.extension.where($this.url='readAccess' or $this.url='writeAccess').value` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CarePlanReadOrWriteAccess",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CarePlanReadOrWriteAccess",
  "version" : "2.14.0",
  "name" : "CarePlanReadOrWriteAccess",
  "status" : "active",
  "date" : "2025-11-13T13:58:05+00:00",
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
