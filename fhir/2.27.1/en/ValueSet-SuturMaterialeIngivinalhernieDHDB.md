# Sutur materiale, ingivinalhernie (DHDB) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sutur materiale, ingivinalhernie (DHDB)**

## ValueSet: Sutur materiale, ingivinalhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SuturMaterialeIngivinalhernieDHDB | *Version*:2.27.1 |
| Active as of 2026-09-09 | *Computable Name*:SuturMaterialeIngivinalhernieDHDB |

 
Sutur materiale, ingivinalhernie (DHDB) 

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
  "id" : "SuturMaterialeIngivinalhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SuturMaterialeIngivinalhernieDHDB",
  "version" : "2.27.1",
  "name" : "SuturMaterialeIngivinalhernieDHDB",
  "title" : "Sutur materiale, ingivinalhernie (DHDB)",
  "status" : "active",
  "date" : "2026-09-09T00:00:00+02:00",
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
  "description" : "Sutur materiale, ingivinalhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
      "concept" : [{
        "code" : "fast_resorbable",
        "display" : "Hurtigt resorbérbar sutur (eks. Vicryl, Dexon, Monocryl)"
      },
      {
        "code" : "slow_resorbable",
        "display" : "Langsomt resorbérbar sutur (eks. PDS, Maxon, Monomax)"
      },
      {
        "code" : "non_resorbable",
        "display" : "Non-resorbérbar (eks. Prolene, nylon, Ethibond, Mersilene)"
      }]
    }]
  }
}

```
