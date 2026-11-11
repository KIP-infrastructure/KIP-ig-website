# Imaging Angio - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Imaging Angio**

## ValueSet: Imaging Angio 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ImagingAngio | *Version*:2.27.3 |
| Active as of 2024-04-29 | *Computable Name*:ImagingAngio |

 
Imaging Angio 

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
  "id" : "ImagingAngio",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ImagingAngio",
  "version" : "2.27.3",
  "name" : "ImagingAngio",
  "title" : "Imaging Angio",
  "status" : "active",
  "date" : "2024-04-29T00:00:00+02:00",
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
  "description" : "Imaging Angio",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalScanningTypes",
      "concept" : [{
        "code" : "ct_angio",
        "display" : "CT angio"
      },
      {
        "code" : "mri_angio",
        "display" : "MR angio"
      }]
    }]
  }
}

```
