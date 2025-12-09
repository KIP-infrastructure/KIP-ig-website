# Paragraph - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Paragraph**

## CodeSystem: Paragraph 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Paragraph | *Version*:2.17.1 |
| Active as of 2022-09-28 | *Computable Name*:Paragraph |

 
Paragraph 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ParagrafferRETSPSYK](ValueSet-ParagrafferRETSPSYK.md)
* [StraffelovsparagrafRETSPSYK](ValueSet-StraffelovsparagrafRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Paragraph",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Paragraph",
  "version" : "2.17.1",
  "name" : "Paragraph",
  "title" : "Paragraph",
  "status" : "active",
  "date" : "2022-09-28T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Paragraph",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 53,
  "concept" : [
    {
      "code" : "§16",
      "display" : "§16",
      "definition" : "§16"
    },
    {
      "code" : "§69",
      "display" : "§69",
      "definition" : "§69"
    },
    {
      "code" : "§73",
      "display" : "§73",
      "definition" : "§73"
    },
    {
      "code" : "§119",
      "display" : "Vold og lign. mod nogen i offentlig tjeneste § 119",
      "definition" : "Vold og lign. mod nogen i offentlig tjeneste § 119",
      "concept" : [
        {
          "code" : "§119_§21",
          "display" : "Vold og lign. mod nogen i offentlig tjeneste, forsøg § 119, jf. § 21",
          "definition" : "Vold og lign. mod nogen i offentlig tjeneste, forsøg § 119, jf. § 21"
        }
      ]
    },
    {
      "code" : "§123",
      "display" : "Trusler, vidnetrusler §123",
      "definition" : "Trusler, vidnetrusler §123"
    },
    {
      "code" : "§180",
      "display" : "Brandstiftelse, kvalificeret § 180",
      "definition" : "Brandstiftelse, kvalificeret § 180",
      "concept" : [
        {
          "code" : "§180_§21",
          "display" : "Brandstiftelse, kvalificeret, forsøg § 180, jf. § 21",
          "definition" : "Brandstiftelse, kvalificeret, forsøg § 180, jf. § 21"
        }
      ]
    },
    {
      "code" : "§181",
      "display" : "Brandstiftelse, forsætlig § 181",
      "definition" : "Brandstiftelse, forsætlig § 181",
      "concept" : [
        {
          "code" : "§181_§21",
          "display" : "Brandstiftelse, forsætlig, forsøg § 181, jf. § 21",
          "definition" : "Brandstiftelse, forsætlig, forsøg § 181, jf. § 21"
        }
      ]
    },
    {
      "code" : "§191",
      "display" : "Narkotikakriminalitet § 191",
      "definition" : "Narkotikakriminalitet § 191",
      "concept" : [
        {
          "code" : "§191_§21",
          "display" : "Narkotikakriminalitet, forsøg § 191, jf. § 21",
          "definition" : "Narkotikakriminalitet, forsøg § 191, jf. § 21"
        }
      ]
    },
    {
      "code" : "§216",
      "display" : "Voldtægt § 216",
      "definition" : "Voldtægt § 216",
      "concept" : [
        {
          "code" : "§216_§21",
          "display" : "Voldtægt, forsøg § 216, jf. § 21",
          "definition" : "Voldtægt, forsøg § 216, jf. § 21"
        }
      ]
    },
    {
      "code" : "§244",
      "display" : "Vold § 244",
      "definition" : "Vold § 244",
      "concept" : [
        {
          "code" : "§244_§21",
          "display" : "Vold, forsøg § 244, jf. § 21",
          "definition" : "Vold, forsøg § 244, jf. § 21"
        }
      ]
    },
    {
      "code" : "§245",
      "display" : "Kvalificeret vold m/skade på legeme eller helbred § 245",
      "definition" : "Kvalificeret vold m/skade på legeme eller helbred § 245",
      "concept" : [
        {
          "code" : "§245_§21",
          "display" : "Kvalificeret vold m/skade på legeme eller helbred, forsøg § 245, jf. § 21",
          "definition" : "Kvalificeret vold m/skade på legeme eller helbred, forsøg § 245, jf. § 21"
        }
      ]
    },
    {
      "code" : "§246",
      "display" : "Kvalificeret vold m/grov skade § 246",
      "definition" : "Kvalificeret vold m/grov skade § 246",
      "concept" : [
        {
          "code" : "§246_§21",
          "display" : "Kvalificeret vold m/grov skade, forsøg § 246, jf. § 21",
          "definition" : "Kvalificeret vold m/grov skade, forsøg § 246, jf. § 21"
        }
      ]
    },
    {
      "code" : "§276",
      "display" : "Tyveri § 276",
      "definition" : "Tyveri § 276",
      "concept" : [
        {
          "code" : "§276_§21",
          "display" : "Tyveri, forsøg § 276, jf. § 21",
          "definition" : "Tyveri, forsøg § 276, jf. § 21"
        }
      ]
    },
    {
      "code" : "§288",
      "display" : "Røveri §288",
      "definition" : "Røveri §288",
      "concept" : [
        {
          "code" : "§288_1",
          "display" : "Røveri § 288, stk. 1",
          "definition" : "Røveri § 288, stk. 1",
          "concept" : [
            {
              "code" : "§288_1_§21",
              "display" : "Røveri, forsøg § 288, stk. 1, jf. § 21",
              "definition" : "Røveri, forsøg § 288, stk. 1, jf. § 21"
            }
          ]
        },
        {
          "code" : "§288_2",
          "display" : "Røveri, særligt farligt, § 288, stk. 2",
          "definition" : "Røveri, særligt farligt, § 288, stk. 2",
          "concept" : [
            {
              "code" : "§288_2_§21",
              "display" : "Røveri, særligt farligt, forsøg § 288, stk. 2, jf. § 21",
              "definition" : "Røveri, særligt farligt, forsøg § 288, stk. 2, jf. § 21"
            }
          ]
        }
      ]
    },
    {
      "code" : "§291",
      "display" : "Hærværk § 291",
      "definition" : "Hærværk § 291",
      "concept" : [
        {
          "code" : "§291_§21",
          "display" : "Hærværk, forsøg § 291, jf. § 21",
          "definition" : "Hærværk, forsøg § 291, jf. § 21"
        }
      ]
    },
    {
      "code" : "§§210-236",
      "display" : "Anden sædelighed §§ 210-236 (- § 216)",
      "definition" : "Anden sædelighed §§ 210-236 (- § 216)",
      "concept" : [
        {
          "code" : "§§210-236_§21",
          "display" : "Anden sædelighed, forsøg §§ 210-236 (- § 216), jf. § 21",
          "definition" : "Anden sædelighed, forsøg §§ 210-236 (- § 216), jf. § 21"
        }
      ]
    },
    {
      "code" : "§§237-241",
      "display" : "Manddrab §§ 237-241",
      "definition" : "Manddrab §§ 237-241",
      "concept" : [
        {
          "code" : "§§237-241_§21",
          "display" : "Manddrab, forsøg §§ 237-241, jf. § 21",
          "definition" : "Manddrab, forsøg §§ 237-241, jf. § 21"
        }
      ]
    },
    {
      "code" : "§§249-255",
      "display" : "Anden personfarlig kriminalitet § 249-255",
      "definition" : "Anden personfarlig kriminalitet § 249-255",
      "concept" : [
        {
          "code" : "§§249-255_§21",
          "display" : "Anden personfarlig kriminalitet, forsøg § 249-255, jf. § 21",
          "definition" : "Anden personfarlig kriminalitet, forsøg § 249-255, jf. § 21"
        }
      ]
    },
    {
      "code" : "§§260-262",
      "display" : "Ulovlig tvang §§ 260-262",
      "definition" : "Ulovlig tvang §§ 260-262",
      "concept" : [
        {
          "code" : "§§260-262_attempt",
          "display" : "Ulovlig tvang, forsøg §§ 260-262",
          "definition" : "Ulovlig tvang, forsøg §§ 260-262"
        }
      ]
    },
    {
      "code" : "§§265-266",
      "display" : "Trusler § 265-266",
      "definition" : "Trusler § 265-266",
      "concept" : [
        {
          "code" : "§§265-266_attempt",
          "display" : "Trusler, forsøg § 265-266",
          "definition" : "Trusler, forsøg § 265-266"
        }
      ]
    },
    {
      "code" : "§§278-280",
      "display" : "Bedrageri mv. §§ 278-280",
      "definition" : "Bedrageri mv. §§ 278-280",
      "concept" : [
        {
          "code" : "§§278-280_§21",
          "display" : "Bedrageri mv., forsøg §§ 278-280, jf. § 21",
          "definition" : "Bedrageri mv., forsøg §§ 278-280, jf. § 21"
        }
      ]
    },
    {
      "code" : "narcotics",
      "display" : "Lov om euforiserende stoffer",
      "definition" : "Lov om euforiserende stoffer",
      "concept" : [
        {
          "code" : "narcotics_attempt",
          "display" : "Lov om euforiserende stoffer, forsøg",
          "definition" : "Lov om euforiserende stoffer, forsøg"
        }
      ]
    },
    {
      "code" : "criminal_law_other",
      "display" : "Straffeloven, øvrige",
      "definition" : "Straffeloven, øvrige",
      "concept" : [
        {
          "code" : "criminal_law_other_attempt",
          "display" : "Straffeloven, øvrige, forsøg",
          "definition" : "Straffeloven, øvrige, forsøg"
        }
      ]
    },
    {
      "code" : "weapons_decree",
      "display" : "Våbenbekendtgørelsen",
      "definition" : "Våbenbekendtgørelsen",
      "concept" : [
        {
          "code" : "weapons_decree_attempt",
          "display" : "Våbenbekendtgørelsen, forsøg",
          "definition" : "Våbenbekendtgørelsen, forsøg"
        }
      ]
    },
    {
      "code" : "traffic_law",
      "display" : "Færdselsloven",
      "definition" : "Færdselsloven",
      "concept" : [
        {
          "code" : "traffic_law_attempt",
          "display" : "Færdselsloven, forsøg",
          "definition" : "Færdselsloven, forsøg"
        }
      ]
    },
    {
      "code" : "special_law",
      "display" : "Særloven, øvrige",
      "definition" : "Særloven, øvrige",
      "concept" : [
        {
          "code" : "special_law_attempt",
          "display" : "Særloven, øvrige, forsøg",
          "definition" : "Særloven, øvrige, forsøg"
        }
      ]
    },
    {
      "code" : "pardon_petition",
      "display" : "Benådningsandragende",
      "definition" : "Benådningsandragende"
    },
    {
      "code" : "asylum_seeker",
      "display" : "Asylansøger",
      "definition" : "Asylansøger"
    }
  ]
}

```
