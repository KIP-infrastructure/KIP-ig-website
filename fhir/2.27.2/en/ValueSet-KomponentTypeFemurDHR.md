# Komponent type - femur (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent type - femur (DHR)**

## ValueSet: Komponent type - femur (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentTypeFemurDHR | *Version*:2.27.2 |
| Active as of 2022-11-07 | *Computable Name*:KomponentTypeFemurDHR |

 
Komponent type - femur (DHR) 

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
  "id" : "KomponentTypeFemurDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentTypeFemurDHR",
  "version" : "2.27.2",
  "name" : "KomponentTypeFemurDHR",
  "title" : "Komponent type - femur (DHR)",
  "status" : "active",
  "date" : "2022-11-07T00:00:00+02:00",
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
  "description" : "Komponent type - femur (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "standard",
        "display" : "Standard"
      },
      {
        "code" : "long",
        "display" : "Lang"
      },
      {
        "code" : "dysplasia_prosthesis",
        "display" : "Dysplasiprotese"
      },
      {
        "code" : "resection_prosthesis",
        "display" : "Resektionsprotese"
      },
      {
        "code" : "resurfacing",
        "display" : "Resurfacing"
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
