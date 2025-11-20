# Treatment schedule - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment schedule**

## CodeSystem: Treatment schedule 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSchedule | *Version*:2.14.1 |
| Active as of 2022-06-03 | *Computable Name*:TreatmentSchedule |

 
Treatment schedule 

 This Code system is referenced in the content logical definition of the following value sets: 

* [TreatmentScheduledALD](ValueSet-TreatmentScheduledALD.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentSchedule",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSchedule",
  "version" : "2.14.1",
  "name" : "TreatmentSchedule",
  "title" : "Treatment schedule",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Treatment schedule",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "implemented",
      "display" : "Implemented or planned implementation",
      "definition" : "Implemented or planned implementation of treatment / Iværksat eller planlagt iværksættelse af behandling"
    },
    {
      "code" : "wait_and_watch",
      "display" : "Wait and watch (WAW) strategy",
      "definition" : "Wait and watch (WAW) strategy / Wait and watch strategi"
    },
    {
      "code" : "no_planned_treatment",
      "display" : "No planned treatment",
      "definition" : "No planned treatment / Ingen planlagt behandling er iværksat"
    }
  ]
}

```
