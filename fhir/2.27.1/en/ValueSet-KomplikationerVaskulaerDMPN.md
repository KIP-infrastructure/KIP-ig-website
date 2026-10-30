# Komplikationer Vaskulær DMPN - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer Vaskulær DMPN**

## ValueSet: Komplikationer Vaskulær DMPN 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerVaskulaerDMPN | *Version*:2.27.1 |
| Active as of 2022-07-14 | *Computable Name*:KomplikationerVaskulaerDMPN |

 
Typer af komplikationer ved vaskulære events - DMPN 

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
  "id" : "KomplikationerVaskulaerDMPN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerVaskulaerDMPN",
  "version" : "2.27.1",
  "name" : "KomplikationerVaskulaerDMPN",
  "title" : "Komplikationer Vaskulær DMPN",
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
  "description" : "Typer af komplikationer ved vaskulære events - DMPN",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "dvt",
        "display" : "Dyb vene trombose"
      },
      {
        "code" : "pulmonaryembolism",
        "display" : "Lungeemboli"
      },
      {
        "code" : "ami",
        "display" : "Myocardieinfarkt"
      },
      {
        "code" : "apoplexia_cerebri",
        "display" : "Apoplexia cerebri"
      },
      {
        "code" : "abdominal",
        "display" : "Abdominal/hepatisk/milt trombose"
      },
      {
        "code" : "tci",
        "display" : "TCI"
      },
      {
        "code" : "thromboembolic",
        "display" : "Anden trombo/emboli"
      }]
    }]
  }
}

```
