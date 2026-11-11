# Sutur materiale, ventralhernie (DHDB) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sutur materiale, ventralhernie (DHDB)**

## ValueSet: Sutur materiale, ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturMaterialeVentralhernieDHDB | *Version*:2.27.3 |
| Active as of 2022-07-20 | *Computable Name*:SuturMaterialeVentralhernieDHDB |

 
Sutur materiale, ventralhernie (DHDB) 

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
  "id" : "SuturMaterialeVentralhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturMaterialeVentralhernieDHDB",
  "version" : "2.27.3",
  "name" : "SuturMaterialeVentralhernieDHDB",
  "title" : "Sutur materiale, ventralhernie (DHDB)",
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
  "description" : "Sutur materiale, ventralhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "fast_resorbable",
        "display" : "Hurtigt resorbérbar sutur (eks. Vicryl, Dexon, Monocryl, V-LOC 90 dage) "
      },
      {
        "code" : "slow_resorbable",
        "display" : "Langsomt resorbérbar sutur (eks. PDS, Maxon, Monomax, V-LOC 180 dage) "
      },
      {
        "code" : "non_resorbable",
        "display" : "Non-resorbérbar (eks. Prolene, nylon, Ethibond, Mersilene)"
      },
      {
        "code" : "Suturmesh",
        "display" : "Suturmesh (eks. Duramesh)"
      }]
    }]
  }
}

```
