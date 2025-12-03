# Reasons for not giving anticoagulation therapy - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reasons for not giving anticoagulation therapy**

## CodeSystem: Reasons for not giving anticoagulation therapy 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ACTherapyNotGiven | *Version*:2.15.0 |
| Active as of 2022-06-03 | *Computable Name*:ACTherapyNotGiven |

 
Årsagen til hvorfor man har fravalgt antikoagulationsbehandling. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AKFravalgt](ValueSet-AKFravalgt.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACTherapyNotGiven",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ACTherapyNotGiven",
  "version" : "2.15.0",
  "name" : "ACTherapyNotGiven",
  "title" : "Reasons for not giving anticoagulation therapy",
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
  "description" : "Årsagen til hvorfor man har fravalgt antikoagulationsbehandling.",
  "content" : "complete",
  "count" : 9,
  "concept" : [
    {
      "code" : "activebleeding",
      "display" : "Aktiv blødning",
      "definition" : "Aktiv blødning"
    },
    {
      "code" : "intracerebralhaemorrhage",
      "display" : "Nylig intracerebral blødning",
      "definition" : "Nylig intracerebral blødning"
    },
    {
      "code" : "hypertension",
      "display" : "Ukontrolleret hypertension",
      "definition" : "Ukontrolleret hypertension (≥160 mmHg)"
    },
    {
      "code" : "diathesis",
      "display" : "Hæmoragisk diatese",
      "definition" : "Hæmoragisk diatese"
    },
    {
      "code" : "othertreatment",
      "display" : "Anden behandling",
      "definition" : "Anden behandling (aurikellukning, LMWH i terapeutiske doser)"
    },
    {
      "code" : "dementia",
      "display" : "Svær demens",
      "definition" : "Svær demens"
    },
    {
      "code" : "reducedfunctionlevel",
      "display" : "Betydelig reduceret funktionsniveau",
      "definition" : "Betydelig reduceret funktionsniveau (mRS ≥4)"
    },
    {
      "code" : "lifespanbelow3months",
      "display" : "Forventet livslængde under 3 måneder",
      "definition" : "Forventet livslængde under 3 måneder"
    },
    {
      "code" : "nopatientconsent",
      "display" : "Manglende patientsamtykke",
      "definition" : "Manglende patientsamtykke"
    }
  ]
}

```
