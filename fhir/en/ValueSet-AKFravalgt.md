# Fravalg af antikoagulationsbehandling; årsag - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fravalg af antikoagulationsbehandling; årsag**

## ValueSet: Fravalg af antikoagulationsbehandling; årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AKFravalgt | *Version*:2.27.2 |
| Active as of 2022-06-23 | *Computable Name*:AKFravalgt |

 
Årsagen til hvorfor antikoagulationsbehandling er fravalgt 

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
  "id" : "AKFravalgt",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AKFravalgt",
  "version" : "2.27.2",
  "name" : "AKFravalgt",
  "title" : "Fravalg af antikoagulationsbehandling; årsag",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Årsagen til hvorfor antikoagulationsbehandling er fravalgt",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ACTherapyNotGiven",
      "concept" : [{
        "code" : "activebleeding",
        "display" : "Aktiv blødning"
      },
      {
        "code" : "intracerebralhaemorrhage",
        "display" : "Nylig intracerebral blødning"
      },
      {
        "code" : "hypertension",
        "display" : "Ukontrolleret hypertension (≥160 mmHg)"
      },
      {
        "code" : "diathesis",
        "display" : "Hæmoragisk diatese"
      },
      {
        "code" : "othertreatment",
        "display" : "Anden behandling (aurikellukning, LMWH i terapeutiske doser)"
      },
      {
        "code" : "dementia",
        "display" : "Svær demens"
      },
      {
        "code" : "reducedfunctionlevel",
        "display" : "Betydelig reduceret funktionsniveau (mRS ≥4)"
      },
      {
        "code" : "lifespanbelow3months",
        "display" : "Forventet livslængde under 3 måneder"
      },
      {
        "code" : "nopatientconsent",
        "display" : "Manglende patientsamtykke"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden årsag"
      }]
    }]
  }
}

```
