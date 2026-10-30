# Typer af blokade underekstremiteter - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typer af blokade underekstremiteter**

## ValueSet: Typer af blokade underekstremiteter 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NerveBlockTypeLower | *Version*:2.27.1 |
| Active as of 2022-06-09 | *Computable Name*:NerveBlockTypeLower |

 
Typer af perifer nerveblokade - underekstremiteter 

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
  "id" : "NerveBlockTypeLower",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NerveBlockTypeLower",
  "version" : "2.27.1",
  "name" : "NerveBlockTypeLower",
  "title" : "Typer af blokade underekstremiteter",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Typer af perifer nerveblokade - underekstremiteter",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BlockTypes",
      "concept" : [{
        "code" : "plexus_lumbalis",
        "display" : "Plexus lumbalis"
      },
      {
        "code" : "plexus_lumbosacralis",
        "display" : "Plexus lumbosacralis"
      },
      {
        "code" : "plexus_sacralis",
        "display" : "Plexus sacralis"
      },
      {
        "code" : "femoralis",
        "display" : "N. Femoralis"
      },
      {
        "code" : "cutaneus_femoris_lateralis",
        "display" : "N. Cutaneus femoris lateralis"
      },
      {
        "code" : "saphenus",
        "display" : "N. Saphenus"
      },
      {
        "code" : "obturatorius",
        "display" : "N. Obturatoriusblock"
      },
      {
        "code" : "ischiadicus_poplitea",
        "display" : "N. Ischiadicus/poplitea blokade"
      },
      {
        "code" : "tibialis",
        "display" : "N. Tibialis"
      },
      {
        "code" : "peroneus",
        "display" : "Peroneus (communis) blokade"
      },
      {
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
