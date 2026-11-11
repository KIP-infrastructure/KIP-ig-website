# NIHSS - 11. Ekstinktion og inattention - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 11. Ekstinktion og inattention**

## ValueSet: NIHSS - 11. Ekstinktion og inattention 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS11EkstinktionInattention | *Version*:2.27.3 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS11EkstinktionInattention |

 
The National Institute of Health Stroke Scale (NIHSS) - 11. Ekstinktion og inattention (tidligere ”neglekt”) (brug visuel eller sensorisk dobbeltsidig stimulation) 

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
  "id" : "NIHSS11EkstinktionInattention",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS11EkstinktionInattention",
  "version" : "2.27.3",
  "name" : "NIHSS11EkstinktionInattention",
  "title" : "NIHSS - 11. Ekstinktion og inattention",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 11. Ekstinktion og inattention (tidligere ”neglekt”) (brug visuel eller sensorisk dobbeltsidig stimulation)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS11ExtinctionInattention",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Ingen abnormalitet påvist"
      },
      {
        "code" : "1",
        "display" : "1 = Inattention eller ekstinktion ved bilateral simultan stimulation ved en af sansemodaliteterne"
      },
      {
        "code" : "2",
        "display" : "2 = Udtalt hemi-inattention / hemi-inattention for mere end én modalitet."
      }]
    }]
  }
}

```
