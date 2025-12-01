# Revision; type - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision; type**

## CodeSystem: Revision; type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RevisionType | *Version*:2.14.2 |
| Active as of 2022-10-07 | *Computable Name*:RevisionType |

 
Revision; type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RevisionstypeDSR](ValueSet-RevisionstypeDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RevisionType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionType",
  "version" : "2.14.2",
  "name" : "RevisionType",
  "title" : "Revision; type",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Revision; type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "one-stage",
      "display" : "One-stage",
      "definition" : "One-stage"
    },
    {
      "code" : "two-stage_step_1",
      "display" : "Two-stage - Step 1",
      "definition" : "Two-stage - Step 1"
    },
    {
      "code" : "two-stage_step_2",
      "display" : "Two-stage - Step 2",
      "definition" : "Two-stage - Step 2"
    }
  ]
}

```
