# PlanDefinitionUuid - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinitionUuid**

## SearchParameter: PlanDefinitionUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid | *Version*:2.13.0 |
| Active as of 2025-11-11 | *Computable Name*:PlanDefinitionUuid |

 
Search by uuid in PlanDefinition 

## PlanDefinitionUuid

Parameter `uuid`:`token`

Search by uuid in PlanDefinition

| | |
| :--- | :--- |
| Resource | [PlanDefinition](http://hl7.org/fhir/R4/plandefinition.html) |
| Expression | `PlanDefinition.extension.where(url='uuid')` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "PlanDefinitionUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid",
  "version" : "2.13.0",
  "name" : "PlanDefinitionUuid",
  "status" : "active",
  "date" : "2025-11-11T11:28:20+00:00",
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
  "description" : "Search by uuid in PlanDefinition",
  "code" : "uuid",
  "base" : ["PlanDefinition"],
  "type" : "token",
  "expression" : "PlanDefinition.extension.where(url='uuid')",
  "comparator" : ["eq"]
}

```
