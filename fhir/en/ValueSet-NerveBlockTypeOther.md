# Typer af blokade øvrige - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typer af blokade øvrige**

## ValueSet: Typer af blokade øvrige 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NerveBlockTypeOther | *Version*:2.27.3 |
| Active as of 2022-06-09 | *Computable Name*:NerveBlockTypeOther |

 
Type Perifer nerveblokade Trunkal/Abdominal/Øvrige 

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
  "id" : "NerveBlockTypeOther",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NerveBlockTypeOther",
  "version" : "2.27.3",
  "name" : "NerveBlockTypeOther",
  "title" : "Typer af blokade øvrige",
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
  "description" : "Type Perifer nerveblokade Trunkal/Abdominal/Øvrige",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BlockTypes",
      "concept" : [{
        "code" : "thorakal_Paravertebral",
        "display" : "Thorakal Paravertebral blokade"
      },
      {
        "code" : "intercostal",
        "display" : "Intercostal blokade"
      },
      {
        "code" : "quadratus_lumborum",
        "display" : "Quadratus lumborum blokade"
      },
      {
        "code" : "transversus_abdominis",
        "display" : "Transversus abdominis plane (TAP) blokade"
      },
      {
        "code" : "ilioinguinalis_iliohypogastricus",
        "display" : "Ilioinguinalis/iliohypogastricus"
      },
      {
        "code" : "pectoralis",
        "display" : "N. Pectoralis"
      },
      {
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
