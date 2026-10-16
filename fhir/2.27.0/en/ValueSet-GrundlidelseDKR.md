# Grundlidelse (DKR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Grundlidelse (DKR)**

## ValueSet: Grundlidelse (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDKR | *Version*:2.27.0 |
| Active as of 2022-10-12 | *Computable Name*:GrundlidelseDKR |

 
Grundlidelse (DKR) 

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
  "id" : "GrundlidelseDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDKR",
  "version" : "2.27.0",
  "name" : "GrundlidelseDKR",
  "title" : "Grundlidelse (DKR)",
  "status" : "active",
  "date" : "2022-10-12T00:00:00+02:00",
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
  "description" : "Grundlidelse (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
      "concept" : [{
        "code" : "arthrosis",
        "display" : "Primær (idiopatisk) artrose"
      },
      {
        "code" : "secondary_arthrosis",
        "display" : "Sek. artrose (f.eks. menisktomi)"
      },
      {
        "code" : "fracture_tibia_condyle",
        "display" : "Følger efter tibiakondylfraktur"
      },
      {
        "code" : "fresh_fracture_tibia_condyle",
        "display" : "Frisk tibiakondylfraktur (inden for 14 dage)"
      },
      {
        "code" : "fracture_femoral_condyle",
        "display" : "Følger efter femurkondylfraktur"
      },
      {
        "code" : "fresh_fracture_femoral_condyle",
        "display" : "Frisk femurkondylfraktur (inden for 14 dage)"
      },
      {
        "code" : "fracture_patella",
        "display" : "Følger efter patellafraktur"
      },
      {
        "code" : "rheumatoid",
        "display" : "Reumatoid artrit"
      },
      {
        "code" : "other_arthritis",
        "display" : "Følger efter anden artrit"
      },
      {
        "code" : "hemophilia",
        "display" : "Hæmofili"
      },
      {
        "code" : "primary_tumor",
        "display" : "Tumor - primær"
      },
      {
        "code" : "metastases",
        "display" : "Tumor - metastase"
      },
      {
        "code" : "osteonecrosis",
        "display" : "Osteonekrose"
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
