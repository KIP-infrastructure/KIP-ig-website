# Komplikationer, behandling (DEGC) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer, behandling (DEGC)**

## ValueSet: Komplikationer, behandling (DEGC) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerBehandlingDEGC | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:KomplikationerBehandlingDEGC |

 
Komplikationer i forhold til DEGC operationer 

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
  "id" : "KomplikationerBehandlingDEGC",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerBehandlingDEGC",
  "version" : "2.27.3",
  "name" : "KomplikationerBehandlingDEGC",
  "title" : "Komplikationer, behandling (DEGC)",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Komplikationer i forhold til DEGC operationer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "ami",
        "display" : "AMI"
      },
      {
        "code" : "chylothorax",
        "display" : "Chylothorax"
      },
      {
        "code" : "fascierupture",
        "display" : "Fascieruptur"
      },
      {
        "code" : "ileus",
        "display" : "Ileus"
      },
      {
        "code" : "intrathoracicbleeding",
        "display" : "Intrathorakal blødning"
      },
      {
        "code" : "intraabdominalabscess",
        "display" : "Intraabdominal absces"
      },
      {
        "code" : "intraabdominalbleeding",
        "display" : "Intraabdominal blødning"
      },
      {
        "code" : "pulmonaryembolism",
        "display" : "Lungeemboli"
      },
      {
        "code" : "perforation",
        "display" : "Perforation"
      },
      {
        "code" : "pleuraexudate",
        "display" : "Pleuraeksudat"
      },
      {
        "code" : "pneumonia",
        "display" : "Pneumoni"
      },
      {
        "code" : "infection",
        "display" : "Sårinfektion"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andre"
      }]
    }]
  }
}

```
