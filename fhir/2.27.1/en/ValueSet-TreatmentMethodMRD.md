# Behandlingsmetode MRD - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandlingsmetode MRD**

## ValueSet: Behandlingsmetode MRD 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentMethodMRD | *Version*:2.27.1 |
| Active as of 2022-07-14 | *Computable Name*:TreatmentMethodMRD |

 
Anvendt behandlingsmetode MRD [DAMYDA] 

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
  "id" : "TreatmentMethodMRD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentMethodMRD",
  "version" : "2.27.1",
  "name" : "TreatmentMethodMRD",
  "title" : "Behandlingsmetode MRD",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Anvendt behandlingsmetode MRD [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentMethodMRD",
      "concept" : [{
        "code" : "flow",
        "display" : "Flow"
      },
      {
        "code" : "ngs",
        "display" : "NGS"
      },
      {
        "code" : "pct",
        "display" : "PCT"
      },
      {
        "code" : "pet",
        "display" : "PET"
      }]
    }]
  }
}

```
