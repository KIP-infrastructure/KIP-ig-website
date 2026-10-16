# Komponent - femur, status (DHR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - femur, status (DHR)**

## ValueSet: Komponent - femur, status (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurStatusDHR | *Version*:2.27.0 |
| Active as of 2022-11-18 | *Computable Name*:KomponentFemurStatusDHR |

 
Komponent - femur, status (DHR) 

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
  "id" : "KomponentFemurStatusDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentFemurStatusDHR",
  "version" : "2.27.0",
  "name" : "KomponentFemurStatusDHR",
  "title" : "Komponent - femur, status (DHR)",
  "status" : "active",
  "date" : "2022-11-18T00:00:00+02:00",
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
  "description" : "Komponent - femur, status (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "replaced",
        "display" : "Udskiftning af femurkomponent"
      },
      {
        "code" : "partial_replacement",
        "display" : "Kun udskiftning af caput (ved revision)"
      },
      {
        "code" : "removed",
        "display" : "Fjernelse af femurkomponent (ved revision)"
      },
      {
        "code" : "not_replaced",
        "display" : "Ikke udskiftet (ved revision)"
      },
      {
        "code" : "not_replaced_hemi",
        "display" : "Ikke udskiftet (tidligere hemialloplastik)"
      }]
    }]
  }
}

```
