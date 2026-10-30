# Scanningstyper; CT, MR - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scanningstyper; CT, MR**

## ValueSet: Scanningstyper; CT, MR 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ScanningstyperCTMR | *Version*:2.27.1 |
| Active as of 2022-06-27 | *Computable Name*:ScanningstyperCTMR |

 
Scanningstyper; CT, MR 

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
  "id" : "ScanningstyperCTMR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ScanningstyperCTMR",
  "version" : "2.27.1",
  "name" : "ScanningstyperCTMR",
  "title" : "Scanningstyper; CT, MR",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
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
  "description" : "Scanningstyper; CT, MR",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalScanningTypes",
      "concept" : [{
        "code" : "ct",
        "display" : "CT"
      },
      {
        "code" : "mri",
        "display" : "MR"
      }]
    }]
  }
}

```
