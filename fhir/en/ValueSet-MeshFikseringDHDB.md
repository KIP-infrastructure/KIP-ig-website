# Mesh fiksering (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh fiksering (DHDB)**

## ValueSet: Mesh fiksering (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MeshFikseringDHDB | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:MeshFikseringDHDB |

 
Mesh fiksering (DHDB) 

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
  "id" : "MeshFikseringDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MeshFikseringDHDB",
  "version" : "2.27.1",
  "name" : "MeshFikseringDHDB",
  "title" : "Mesh fiksering (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Mesh fiksering (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "suture",
        "display" : "Sutur"
      },
      {
        "code" : "tack",
        "display" : "Tackers"
      },
      {
        "code" : "tack_sutur",
        "display" : "Tackers & sutur"
      },
      {
        "code" : "clip",
        "display" : "Clips"
      },
      {
        "code" : "surgical_glue",
        "display" : "Lim"
      },
      {
        "code" : "glue_sutur",
        "display" : "Lim & sutur"
      },
      {
        "code" : "glue_tack_clip",
        "display" : "Lim & tackers/clips"
      },
      {
        "code" : "self_fixative_mesh",
        "display" : "Selvfikserende mesh"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden fiksering"
      },
      {
        "code" : "none",
        "display" : "Ikke fixeret"
      }]
    }]
  }
}

```
