# Treatment_Indication_CLL - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment_Indication_CLL**

## ValueSet: Treatment_Indication_CLL 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentIndicationCLL | *Version*:2.27.1 |
| Active as of 2022-07-13 | *Computable Name*:TreatmentIndicationCLL |

 
Indikation for kemoterapi/behandling - CLL 

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
  "id" : "TreatmentIndicationCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentIndicationCLL",
  "version" : "2.27.1",
  "name" : "TreatmentIndicationCLL",
  "title" : "Treatment_Indication_CLL",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Indikation for kemoterapi/behandling - CLL",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIndication",
      "concept" : [{
        "code" : "cll",
        "display" : "CLL"
      },
      {
        "code" : "autoimmune",
        "display" : "Autoimmune fænomener"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
