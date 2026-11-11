# Cement (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cement (DKR)**

## ValueSet: Cement (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CementDKR | *Version*:2.27.2 |
| Active as of 2022-10-13 | *Computable Name*:CementDKR |

 
Cement (DKR) 

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
  "id" : "CementDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CementDKR",
  "version" : "2.27.2",
  "name" : "CementDKR",
  "title" : "Cement (DKR)",
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
  "description" : "Cement (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CementType",
      "concept" : [{
        "code" : "biomet_cement_lv",
        "display" : "Biomet: Bone Cement LV"
      },
      {
        "code" : "biomet_cement_r",
        "display" : "Biomet: Bone Cement R"
      },
      {
        "code" : "biomet_cement_v",
        "display" : "Biomet: Bone Cement V"
      },
      {
        "code" : "biomet_cement_plus",
        "display" : "Biomet: Plus Bone Cement"
      },
      {
        "code" : "cmw1",
        "display" : "CMW I"
      },
      {
        "code" : "cmw2",
        "display" : "CMW II"
      },
      {
        "code" : "cmw3",
        "display" : "CMW III"
      },
      {
        "code" : "copal_gc",
        "display" : "Copal G+C"
      },
      {
        "code" : "copal_gv",
        "display" : "Copal G+V"
      },
      {
        "code" : "lvc_standard",
        "display" : "LVC-standard"
      },
      {
        "code" : "palacos",
        "display" : "Palacos"
      },
      {
        "code" : "palacos_low",
        "display" : "Palacos low"
      },
      {
        "code" : "palacos_rg",
        "display" : "Palacos R+G"
      },
      {
        "code" : "refobacin_cement_lv",
        "display" : "Refobacin: Bone Cement LV"
      },
      {
        "code" : "refobacin_cement_r",
        "display" : "Refobacin: Bone Cement R"
      },
      {
        "code" : "refobacin_cement_plus",
        "display" : "Refobacin: Plus Bone Cement"
      },
      {
        "code" : "refobacin_revision",
        "display" : "Refobacin: Revision"
      },
      {
        "code" : "simplex",
        "display" : "Simplex"
      },
      {
        "code" : "smartmix",
        "display" : "SmartMix"
      },
      {
        "code" : "smartset",
        "display" : "SmartSet"
      },
      {
        "code" : "sulfix",
        "display" : "Sulfix"
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
