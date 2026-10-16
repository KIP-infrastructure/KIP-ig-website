# Postoperative komplikationer (DCCG) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Postoperative komplikationer (DCCG)**

## ValueSet: Postoperative komplikationer (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PostoperativeKomplikationerDCCG | *Version*:2.27.0 |
| Active as of 2022-11-10 | *Computable Name*:PostoperativeKomplikationerDCCG |

 
Postoperative komplikationer (DCCG) 

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
  "id" : "PostoperativeKomplikationerDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PostoperativeKomplikationerDCCG",
  "version" : "2.27.0",
  "name" : "PostoperativeKomplikationerDCCG",
  "title" : "Postoperative komplikationer (DCCG)",
  "status" : "active",
  "date" : "2022-11-10T00:00:00+02:00",
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
  "description" : "Postoperative komplikationer (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "perforation",
        "display" : "Peroperativ perforation af tarm"
      },
      {
        "code" : "bleeding",
        "display" : "Blødning som følge af endoskopi"
      },
      {
        "code" : "post_polypectomy_syndrome",
        "display" : "Postpolypektomisyndrom"
      },
      {
        "code" : "urinary_retention",
        "display" : "Urinretention"
      },
      {
        "code" : "medical",
        "display" : "Medicinsk komplikation"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden kirurgisk komplikation"
      }]
    }]
  }
}

```
