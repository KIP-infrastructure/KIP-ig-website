# Komponent - supplement (DKR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - supplement (DKR)**

## ValueSet: Komponent - supplement (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentSupplementDKR | *Version*:2.27.3 |
| Active as of 2022-10-13 | *Computable Name*:KomponentSupplementDKR |

 
Komponent - supplement (DKR) 

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
  "id" : "KomponentSupplementDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentSupplementDKR",
  "version" : "2.27.3",
  "name" : "KomponentSupplementDKR",
  "title" : "Komponent - supplement (DKR)",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Komponent - supplement (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "stem_femur",
        "display" : "Femur stem"
      },
      {
        "code" : "augment_femur",
        "display" : "Femuraugment"
      },
      {
        "code" : "cone_sleeve_femur",
        "display" : "Femurcone/-sleve"
      },
      {
        "code" : "stem_tibia",
        "display" : "Tibiastem"
      },
      {
        "code" : "augment_tibia",
        "display" : "Tibiaaugment"
      },
      {
        "code" : "cone_sleeve_tibia",
        "display" : "Tibiacone/-sleve"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      },
      {
        "code" : "none",
        "display" : "Ingen"
      }]
    }]
  }
}

```
