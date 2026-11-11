# Planlagt eller iværksat behandling - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Planlagt eller iværksat behandling**

## ValueSet: Planlagt eller iværksat behandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentScheduledALD | *Version*:2.27.2 |
| Active as of 2022-12-07 | *Computable Name*:TreatmentScheduledALD |

 
Planlagt eller iværksat behandling 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "TreatmentScheduledALD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentScheduledALD",
  "version" : "2.27.2",
  "name" : "TreatmentScheduledALD",
  "title" : "Planlagt eller iværksat behandling",
  "status" : "active",
  "date" : "2022-12-07T00:00:00+02:00",
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
  "description" : "Planlagt eller iværksat behandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSchedule",
      "concept" : [{
        "code" : "implemented",
        "display" : "Ja"
      },
      {
        "code" : "wait_and_watch",
        "display" : "Wait-and-watch strategi."
      },
      {
        "code" : "no_planned_treatment",
        "display" : "Nej"
      }]
    }]
  }
}

```
